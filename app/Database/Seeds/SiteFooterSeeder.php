<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiteFooterSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'title' => 'Column 1',
                'content' => '<div class="footer-tittle">
                                <div class="footer-logo mb-20">
                                    <a href="#"><img src="http://localhost:8080/uploads/images/1662847184_267e0fed7c32b1cd20f3.png" alt=""></a>
                                </div>
                            </div>',
                'language_id' => 1,
                'state' => 'release'

            ],
            [
                'title' => 'Column 2',
                'content' => '<div class="footer-tittle">
                                <h4>Info Kontak</h4>
                                <ul>
                                    <li>
                                        <p>Alamat :<br>Jl.  <br>[city_name] [postal_code]</p>
                                    </li>
                                    <li><a href="#">Telp : <br>-</a></li>
                                    <li><a href="#">Email : <br>-</a></li>
                                </ul>
                            </div>',
                'language_id' => 1,
                'state' => 'release'

            ],
            [
                'title' => 'Column 3',
                'content' => '<div class="footer-tittle">                                
                                <h4>Tautan Penting</h4>
                                <ul>
                                <li><a href="#">Artikel</a></li>
                                <li><a href="#">Agenda</a></li><a href="#">
                                </a><li><a href="#"></a><a href="#">Camp</a></li>
                                <li><a href="#">Care</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Kebijakan Privasi</a></li>
                            </ul>
                            </div>',
                'language_id' => 1,
                'state' => 'release'

            ],
            [
                'title' => 'Column 4',
                'content' => '<div class="footer-tittle">
                                <h4>Buletin DeMasjid</h4>
                                <div class="footer-pera footer-pera2">
                                <p>Dapatkan berita terbaru dari program &amp; layanan DeMasjid.</p>
                                </div>
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                    <input type="email" name="email" id="newsletter-form-email" placeholder="email" class="placeholder hide-on-focus" onfocus="this.placeholder = " onblur="this.placeholder = "Email Address" >
                                    <div class="form-icon">
                                        <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="/assets/app/theme-charityworks/img/gallery/form.png" alt=""></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                    
                                </div>
                            </div></div>',
                'language_id' => 1,
                'state' => 'release'
            ],

        ];

        $this->db->table('sitefooter')->insertBatch($data);
    }
}
