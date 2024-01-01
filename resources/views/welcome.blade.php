<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/root.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/index.css">
</head>

<body>
    <header>
        <img class="header__img" src="{{ asset('assets') }}/img/logo.webp" alt="">
        <nav class="header__nav">
            <a href="" class="header__link">
                <p>Cloud Hosting</p>
                <span class="header__arrow">></span>
            </a>
            <a href="" class="header__link">
                <p>Server</p>
                <span class="header__arrow">></span>
            </a>
            <a href="" class="header__link">
                <p>Domain</p>
                <span class="header__arrow">></span>
            </a>
            <a href="" class="header__link">
                <p>Email Suite</p>
                <span class="header__arrow">></span>
            </a>
            <a href="" class="header__link">
                <p>Service</p>
                <span class="header__arrow">></span>
            </a>
            <a href="" class="header__link">
                <p>Internet Access</p>
                <span class="header__arrow">></span>
            </a>
            <a href="" class="header__link">
                <p>Promo</p>
            </a>
        </nav>
        <div class="header__button">
            <div class="get-menu"
                onclick="document.getElementsByClassName('header__nav')[0].classList.toggle('active')">Menu</div>
            <a href="" class="button bg-theme">Daftar</a>
        </div>
        <div class="header__button">
            <div class="get-menu"
                onclick="document.getElementsByClassName('header__nav')[0].classList.toggle('active')">Menu</div>
            <a href="" class="button bg-theme">Login</a>
        </div>
    </header>
    <main>
        <section class="advertisement__container content-wrapper">
            <div class="advertisement__box">
                <div class="advertisement__title">
                    <p>Cloud Hosting Indonesia untuk</p>
                    <span class="text-theme">Kesuksesan Websitemu!</span>
                </div>
                <div class="advertisement__explain">
                    <p>Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan Dukungan 24 jam untuk memenuhi
                        kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data Center Tier 3.</p>
                    <span class="text-theme">#QwordsYourSuccess</span>
                </div>
                <div class="advertisement__search">
                    <form action="" class="advertisement__form">
                        <div class="advertisement__pack bg-theme">
                            <input type="text" class="advertisement__input" placeholder="Cari Nama Domainmu">
                            <div class="advertisement__select">
                                <div class="advertisement__label">
                                    <p>--Pilih--</p>
                                    <span class="advertisement__arrow text-theme">></span>
                                </div>
                                <div class="advertisement__value">
                                    <div class="advertisement__option">
                                        .id
                                    </div>
                                    <div class="advertisement__option">
                                        .com
                                    </div>
                                    <div class="advertisement__option">
                                        .website
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="advertisement__submit button bg-theme">Cari</button>
                    </form>
                </div>

            </div>
           
        </section>

 

        <section class="promo__container content-wrapper text-theme">
            <div class="content-wrapper">
                <h1 class="promo__heading ">Cloud Hosting Indonesia Diskon Hingga
                    <img class="promo__img" src="{{ asset('assets') }}/svg/50-percent.svg" alt="">
                </h1>
                <p class="promo__text">Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website
                    anda
                </p>
            </div>
        </section>

        <section class="packet__container content-wrapper">
            <h1 class="section-title">Pilihan <span class="text-theme">Paket</span></h1>
            <div class="packet__hosting">
                <div class="packet__card">
                    <div class="packet__title">VCH1</div>
                    <div class="packet__text">Value Cloud Hosting</div>

                    <div class="packet__details">
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/disk.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Disk</div>
                            <div class="packet__value">3 GB</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/bandwith.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Bandwith</div>
                            <div class="packet__value">Unlimited</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/core.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Core CPU</div>
                            <div class="packet__value">0.5 Core</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/addon.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Addon / parked domain</div>
                            <div class="packet__value">No</div>
                        </div>
                    </div>
                    <div class="packet__price">
                        <div class="packet__normal-prc">Rp. 24.000</div>
                        <div class="packet__discount-prc badge badge-theme">Rp. 14.500</div>
                    </div>
                    <div class="packet__button">
                        <div class="packet__buy button">
                            Pesan Sekarang
                        </div>
                    </div>
                </div>
                <div class="packet__card">
                    <div class="packet__title">Signature</div>
                    <div class="packet__text">Unlimited Hosting</div>

                    <div class="packet__details">
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/disk.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Disk</div>
                            <div class="packet__value">Unlimited</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/bandwith.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Bandwith</div>
                            <div class="packet__value">Unlimited</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/core.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Core CPU</div>
                            <div class="packet__value">1 Core</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/addon.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Addon / parked domain</div>
                            <div class="packet__value">5/5</div>
                        </div>
                    </div>
                    <div class="packet__price">
                        <div class="packet__normal-prc">Rp. 109.000</div>
                        <div class="packet__discount-prc badge badge-theme">Rp. 89.900</div>
                    </div>
                    <div class="packet__button">
                        <div class="packet__buy button">
                            Pesan Sekarang
                        </div>
                    </div>
                </div>
                <div class="packet__card">
                    <div class="packet__title">HPCH Bisnis 1</div>
                    <div class="packet__text">High Performance</div>

                    <div class="packet__details">
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/disk.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Disk</div>
                            <div class="packet__value">3 GB</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/bandwith.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Bandwith</div>
                            <div class="packet__value">Unlimited</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/core.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Core CPU</div>
                            <div class="packet__value">1 Core</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/addon.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Addon / parked domain</div>
                            <div class="packet__value">-</div>
                        </div>
                    </div>
                    <div class="packet__price">
                        <div class="packet__normal-prc">Rp. 90.000</div>
                        <div class="packet__discount-prc badge badge-theme">Rp. 79.000</div>
                    </div>
                    <div class="packet__button">
                        <div class="packet__buy button">
                            Pesan Sekarang
                        </div>
                    </div>
                </div>
                <div class="packet__card">
                    <div class="packet__title">VPS SC1</div>
                    <div class="packet__text">Cloud VPS KVM SSD</div>

                    <div class="packet__details">
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/disk.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Disk</div>
                            <div class="packet__value">25 GB</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/bandwith.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Bandwith</div>
                            <div class="packet__value">Unlimited</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/core.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Core CPU</div>
                            <div class="packet__value">1 Core</div>
                        </div>
                        <img class="packet__icon" src="{{ asset('assets/img/index/packet') }}/addon.webp" />
                        <div class="packet__div">
                            <div class="packet__type">Addon / parked domain</div>
                            <div class="packet__value">unlimited</div>
                        </div>
                    </div>
                    <div class="packet__price">
                        <div class="packet__normal-prc">Rp. 135.000</div>
                        <div class="packet__discount-prc badge badge-theme">Rp. 75.000</div>
                    </div>
                    <div class="packet__button">
                        <div class="packet__buy button">
                            Pesan Sekarang
                        </div>
                    </div>
                </div>
            </div>
        </section>





     

        <section class="commit__container content-wrapper">
            <h1 class="section-title">Komitmen <span class="text-theme">Qwords</span></h1>
            <p>Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords</p>
            <br>
            <div class="commit__box">
                <div class="commit__card">
                    <img src="{{ asset('assets/img/index/commit') }}/call.webp" alt="" class="commit__icon">
                    <div class="commit__title">Layanan 24/7</div>
                    <div class="commit__content">Tim Technical Support dan Customer Service Qwords siap membantu Anda
                        selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support
                        Ticket.</div>
                </div>
                <div class="commit__card">
                    <img src="{{ asset('assets/img/index/commit') }}/book.webp" alt="" class="commit__icon">
                    <div class="commit__title">Panduan Manual Lengkap</div>
                    <div class="commit__content">Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan
                        tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif.</div>
                </div>
                <div class="commit__card">
                    <img src="{{ asset('assets/img/index/commit') }}/networkAlt.webp" alt=""
                        class="commit__icon">
                    <div class="commit__title">Up time 99.99%</div>
                    <div class="commit__content">Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang
                        tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple
                        peering.</div>
                </div>
                <div class="commit__card">
                    <img src="{{ asset('assets/img/index/commit') }}/guard.webp" alt=""
                        class="commit__icon">
                    <div class="commit__title">Jaminan keamanan</div>
                    <div class="commit__content">Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan
                        pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.</div>
                </div>
                <div class="commit__card">
                    <img src="{{ asset('assets/img/index/commit') }}/router.webp" alt=""
                        class="commit__icon">
                    <div class="commit__title">Clustered DNS</div>
                    <div class="commit__content">DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya.
                        Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.
                    </div>
                </div>
                <div class="commit__card">
                    <img src="{{ asset('assets/img/index/commit') }}/diamond.webp" alt=""
                        class="commit__icon">
                    <div class="commit__title">High Enterprise Server</div>
                    <div class="commit__content">Standar server Qwords adalah server kelas enterprise Dual Xeon Octa
                        Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan
                        terkemuka.</div>
                </div>
                <div class="commit__card">
                    <img src="{{ asset('assets/img/index/commit') }}/networkAlt.webp" alt=""
                        class="commit__icon">
                    <div class="commit__title">Tier 1 Network</div>
                    <div class="commit__content">Tier 1 Network merupakan jaringan dunia tanpa transit network, yang
                        membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup
                        network.</div>
                </div>
                <div class="commit__card">
                    <img src="{{ asset('assets/img/index/commit') }}/network.webp" alt=""
                        class="commit__icon">
                    <div class="commit__title">Peering Network</div>
                    <div class="commit__content">Jaringan di Qwords terhubung langsung ke public peering seperti
                        OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.</div>
                </div>
            </div>
        </section>



        <section class="testimonial__container content-wrapper">
            <h1 class="section-title">Apa Kata Mereka?</h1>
            <p class="testimonial__subtitle">Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari
                Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>

            <div class="testimonial__box">
                <div class="testimonial__card content-wrapper">
                    <div class="testimonial__profile">
                        <img class="testimonial__img" src="{{ asset('assets/img/index/testimonial') }}/testi1.webp"
                            alt="">
                        <div class="testimonial__name">Budi Raharjo</div>
                        <div class="testimonial__profession">Founder ID Cert</div>
                    </div>
                    <div class="testimonial__quotes">
                        <img class="testimonial__cite" src="{{ asset('assets/img/index/testimonial') }}/cite.png"
                            alt="">
                        <p class="testimonial__text">Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat
                            Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.</p>
                    </div>
                    <div class="testimonial__description">
                        Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa informasi
                        keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami
                        terhadap server dan hosting yang selalu up selama 24 jam.
                    </div>
                    <a href="" class="button button-theme testimonial__button">Lihat Video Selengkapnya ></a>
                </div>
                <div class="testimonial__card content-wrapper">
                    <div class="testimonial__profile">
                        <img class="testimonial__img" src="{{ asset('assets/img/index/testimonial') }}/testi2.webp"
                            alt="">
                        <div class="testimonial__name">Kuns Kurniawan</div>
                        <div class="testimonial__profession"> PR Event Info BDG</div>
                    </div>
                    <div class="testimonial__quotes">
                        <img class="testimonial__cite" src="{{ asset('assets/img/index/testimonial') }}/cite.png"
                            alt="">
                        <p class="testimonial__text">Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh
                            waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!.</p>
                    </div>
                    <div class="testimonial__description">
                        Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah
                        informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah
                        menggunakan dukungan dari Qwords.
                    </div>
                    <a href="" class="button button-theme testimonial__button">Lihat Video Selengkapnya ></a>
                </div>
                <div class="testimonial__card content-wrapper">
                    <div class="testimonial__profile">
                        <img class="testimonial__img" src="{{ asset('assets/img/index/testimonial') }}/testi3.webp"
                            alt="">
                        <div class="testimonial__name">Denden Sofiudin</div>
                        <div class="testimonial__profession">Owner Rumah Kopi temanggung</div>
                    </div>
                    <div class="testimonial__quotes">
                        <img class="testimonial__cite" src="{{ asset('assets/img/index/testimonial') }}/cite.png"
                            alt="">
                        <p class="testimonial__text">Hingga saat ini pula, kami tidak pernah menemukan masalah yang
                            berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik,
                            membuat kami tidak ingin berpindah dari Qwords.</p>
                    </div>
                    <div class="testimonial__description">
                        Penjualan Rumah Kopi Temanggung 90% dilakukan secara online, salah satunya menggunakan website.
                        Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords.
                    </div>
                    <a href="" class="button button-theme testimonial__button">Lihat Video Selengkapnya ></a>
                </div>
            </div>
        </section>




    </main>
    <footer>
        <div class="footer__heading">
            <img src="{{ asset('assets/img/index/footer/logo-dark.webp') }}" alt="" class="footer__logo">
            <h2>PT Qwords Company International</h2>
        </div>
        <br>
   
        <div class="footer__menu">
            <p class="footer__title">Alamat Kantor</p>
            <div class="footer__box">
                <div class="footer__card">
                    <div class="footer__part">Surabaya </div>
                    <p>Gedung Bursa Efek Indonesia Lt.10, Jl. Taman AIS Nasution No.21, Surabaya 60271 - Indonesia 031
                        30008800</p>
                </div>
                <div class="footer__card">
                    <div class="footer__part">Yogyakarta </div>
                    <p>Jl. Blotan no. 18 Kayen Wedomartani, Ngemplak, Sleman, Yogyakarta 55584 - Indonesia 0274 6058800
                    </p>
                </div>
                <div class="footer__card">
                    <div class="footer__part">Jakarta </div>
                    <p>Gedung Cyber 1 Lantai 3, Jl.Kuningan Barat no.8, Jakarta 12710 - Indonesia 021 39708800</p>
                </div>
                <div class="footer__card">
                    <div class="footer__part">Bandung </div>
                    <p>Jl. Terusan Setra Indah I No.19, Sukagalih, Sukajadi, Bandung 40163 - Indonesia 022 30508800</p>
                </div>
            </div>
        </div>
        <div class="footer__menu">
            <p class="footer__title">Support</p>
            <div class="footer__card footer__support">
                <div class="footer__part">Payment </div>
                <img src="{{ asset('assets/img/index/footer/all-payment.webp') }}" alt=""
                    class="footer__img__payment">
            </div>
            <div class="footer__card footer__support">
                <div class="footer__part">Certification</div>
                <div class="footer__certification">
                    <img src="{{ asset('assets/img/index/footer/bsi.webp') }}" alt=""
                        class="footer__picture">
                    <img src="{{ asset('assets/img/index/footer/code.webp') }}" alt=""
                        class="footer__picture">
                    <img src="{{ asset('assets/img/index/footer/icann-logo.webp') }}" alt=""
                        class="footer__picture">
                    <img src="{{ asset('assets/svg/badge_litespeed.svg') }}" alt="" class="footer__picture">
                    <img src="{{ asset('assets/svg/badge_whmadmin.svg') }}" alt="" class="footer__picture">
                    <img src="{{ asset('assets/img/index/footer/acronis-cloud-tech.webp') }}" alt=""
                        class="footer__picture">
                    <img src="{{ asset('assets/img/index/footer/acronis-cloud-sales.webp') }}" alt=""
                        class="footer__picture">
                </div>
            </div>
        </div>
        <div style="display: flex; margin-top: 15px">
            <div class="footer__socials">
                <img src="{{ asset('assets/img/index/footer/Facebook.webp') }}" alt="" class="svg-m">
                <img src="{{ asset('assets/img/index/footer/Instagram.webp') }}" alt="" class="svg-m">
                <img src="{{ asset('assets/img/index/footer/Twitter.webp') }}" alt="" class="svg-m">
                <img src="{{ asset('assets/img/index/footer/Youtube.webp') }}" alt="" class="svg-m">
            </div>
        </div>
        <br>
       

    </footer>
    <div class="call-centre">
        <img src="{{ asset('assets/svg') }}/call.svg" alt="">
    </div>
</body>

</html>
