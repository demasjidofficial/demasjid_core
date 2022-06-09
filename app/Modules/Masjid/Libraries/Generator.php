<?php

namespace App\Modules\Masjid\Libraries;

class Generator
{
    private $envPathFile;
    private $hostPathFile;
    private $domainName;
    private $domainFolder;

    function __construct(String $envPathFile, String $hostPathFile, String $domainName, String $domainFolder)
    {
        $this->envPathFile = $envPathFile;
        $this->domainName = $domainName;
        $this->domainFolder = $domainFolder;
        $this->hostPathFile = $hostPathFile;
    }

    public function env()
    {
        $content = <<<STR
[database]
database = dm_{$this->domainFolder}
username = demasjid
password = Demasjid123*
[app]
baseURL = {$this->domainName}

STR;
        log_message('critical', 'generate file '.$this->envPathFile);
        write_file($this->envPathFile, $content);
    }

    public function config()
    {
        $domainName = str_replace('https://', '', $this->domainName);
        $domainName = str_replace('http://', '', $this->domainName);
        $content = <<<STR
    server {
    server_name {$this->domainName};

    #root  /var/www/html/demasjid_core/public;
    root  /var/www/html/demasjid_core/domains/{$this->domainFolder};
    error_log /var/log/nginx/{$this->domainFolder}.log;
    index index.php index.html index.htm;

    location / {
        try_files \$uri \$uri/ /index.php\$is_args\$args;
    }

    location ~ \\.php$ {
        # include snippets/fastcgi-php.conf;
	  fastcgi_param CI_ENVIRONMENT "production";
        # With php-fpm:
        # fastcgi_pass unix:/run/php-fpm/www.sock;
        # With php-cgi:
        # fastcgi_pass 127.0.0.1:9000;        
        try_files \$uri =404;
        fastcgi_pass unix:/run/php-fpm/www.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;

    }

    error_page 404 /index.php;

    # deny access to hidden files such as .htaccess
    location ~ /\\. {
        deny all;
    }
  
    # listen [::]:443 ssl ipv6only=on; # managed by Certbot
    listen 443 ssl; # managed by Certbot
    ssl_certificate /etc/letsencrypt/live/demo.demasjid.com/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/demo.demasjid.com/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot

}
STR;
        log_message('critical', 'generate file '.$this->hostPathFile);
        write_file($this->hostPathFile, $content);
    }

    private function migrate($dbDomain){
        // $config          = new Migrations();
        // $config->enabled = true;
        // $dbConfig      = config('Database');        
        // $domainDbConfig = $dbConfig->default;        
        // $domainDbConfig['database'] = $dbDomain;
        // config('Database')->default['database'] = $dbDomain;        
        // $migrations = Services::migrations();
        // $migrations->setSilent(true);
        // $migrations->setNamespace(null);
        // $migrations->latest();
        // config('Database')->default['database'] = 'default';
    }
    public function database($idMember, $passwordParam){
        log_message('critical', 'create database starting .....');
        $db = db_connect();
        $dbName = $db->getDatabase();
        $dbDomain = 'dm_'.$this->domainFolder;
        $db->simpleQuery("create database IF NOT EXISTS $dbDomain");                    
        log_message('critical', 'create database success');
        foreach($this->initdb() as $table){
          if(in_array($table, ['wilayah','languages', 'uom_category', 'uom', 'settings', 'chart_of_account'])){
            $db->simpleQuery("CREATE TABLE IF NOT EXISTS {$dbDomain}.{$table} select * from {$dbName}.{$table};");
          }else{
            $db->simpleQuery("CREATE TABLE IF NOT EXISTS {$dbDomain}.{$table} LIKE {$dbName}.{$table};");
          }
          
          log_message('critical', "create table {$dbDomain}.{$table} success");
        }
        log_message('critical', 'create seed database, starting .........');            
        
        $sqls = [
        "INSERT INTO $dbDomain.users (username,first_name,last_name,created_at,updated_at) select email, name, name, now() , now() from $dbName.member where id = $idMember",
        "INSERT INTO $dbDomain.auth_groups_users (user_id,`group`,created_at) VALUES (1,'superadmin',now())",
        "INSERT INTO $dbDomain.auth_identities (user_id,`type`,name,secret,secret2,created_at,updated_at)  select 1,'email_password',name,email,'$passwordParam',now(), now() from $dbName.member where id = $idMember",
        "INSERT INTO $dbDomain.entity (name,`type`,created_at,updated_at,created_by) select name, 'masjid', now(), now() , 1 from $dbName.member where id = $idMember",
        "INSERT INTO $dbDomain.profile (desa_id,code,address,path_logo,path_image,entity_id,created_at,updated_at) select wilayah_id, code, address, path_logo, path_image , 1, now(), now() from $dbName.member where id = $idMember"
        ];

        foreach($sqls as $sql){
            $db->simpleQuery($sql);
        }
        
        log_message('critical', 'create seed database, success');
    }

    private function initdb(){                
      return [
        'users'
        ,'account_balance'
        ,'auth_activation_attempts'
        ,'auth_groups_users'
        ,'auth_identities'        
        ,'auth_permissions_users'
        ,'auth_remember_tokens'
        ,'auth_reset_attempts'
        ,'auth_logins'
        ,'entity'
        ,'bab'
        ,'balance'
        ,'bmdonationtype'
        ,'bminfaqshodaqoh'
        ,'bminfaqshodaqohcategory'
        ,'chart_of_account'        
        ,'imam'
        ,'jabatan'
        ,'kategori_pelajaran'
        ,'kelas'
        ,'languages'
        ,'materi'
        ,'member'
        ,'meta_info'
        ,'migrations'
        ,'non_rawatib_schedule'
        ,'pelajaran'
        ,'pendaftaran'
        ,'pengurus'
        ,'profile'
        ,'program'
        ,'program_category'
        ,'program_cost'
        ,'rawatib_schedule'
        ,'settings'
        ,'sitemenus'
        ,'sitepages'
        ,'siteposts'
        ,'sitesections'
        ,'sitesliders'
        ,'sitesocials'
        ,'uom_category'
        ,'uom'                
        ,'wilayah'
      ];
    }
}
