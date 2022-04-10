<div>
    <h3>
        Assalamualaikum Warohmatulloh Wabarokatuh.
    </h3>

    <p>
        Ahlan wa sahlan <?= $data->name ?? '' ?> di platform DeMasjid.

        Akun masjid Anda sudah aktif saat ini. Berikut detil aksesnya,

        URL Website: <?= $data->domain ?? '' ?>

        URL Demasjid Panel: <?= $data->domain ?? '' ?>/login
        atau bisa klik MASUK/LOGIN di pojok kanan atas dari website masjid.

        Username: <?= $data->email ?? '' ?>
        Password: <?= $data->code ?? '' ?>

        Semoga bermanfaat. Mohon doanya untuk pengembangan platform Demasjid ini. Jazakumulloh khoiron katsiron.

        Wassalamualaikum Warohmatulloh Wabarokatuh.
    </p>
    <hr>
    <div>
        Hormat kami,

        DeMasjid Team
        www.demasjid.com
    </div>
</div>