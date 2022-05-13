
@extends('layouts.main')

@section('content')
    <h1>About</h1>

    <section id="about" class="about-mf sect-pt4 route my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <div class="about-img">
                                    <img src="{{ $image }}" class="img-fluid rounded b-shadow-a border-info" alt=""  height="100">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-7">
                                <div class="about-info">
                                    <p><span class="title-s">Name: </span> <span>Nasruddin 200180020</span></p>
                                    <p><span class="title-s">Profile: </span> <span>Front End Web Developer</span></p>
                                    <p><span class="title-s">Email: </span> <span>nasruddin.200180020@mhs.unimal.ac.id</span></p>
                                    <p><span class="title-s">Phone: </span> <span>(+62) 822-6742-9797</span></p>
                                </div>
                            </div>
                            </div>
                            <div class="skill-mf">
                            <p class="title-s">My Skill</p>
                            <span>HTML</span> <span class="pull-right">85%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span>CSS3</span> <span class="pull-right">65%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span>Bootstrep</span> <span class="pull-right">80%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span>JAVASCRIPT</span> <span class="pull-right">50%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>

                            <div class="sosial text-info my-5">
                                <p class="lead"><b>Sosial Media</b></p>
                                <a class="fbk" href="https://web.facebook.com/nas.r.16100" target="_blank"><i class="bi bi-facebook"></i></a>
                                <a class="ig" href="https://www.instagram.com/nas_staiko/" target="_blank"><i class="bi bi-instagram"></i></a>
                                <a class="git" href="https://github.com/nasdev07" target="_blank"><i class="bi bi-github"></i></a>
                                <a class="wa" href="https://wa.me/+6282164161283?text=Halo%20NasDev" target="_blank"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-me pt-4 pt-md-0">
                            <div class="title-box-2">
                                <h5 class="title-left">
                                About me
                                </h5>
                            </div>
                            <p class="text-dark">
                                🚀 {{ $name }} <br>
                                📘  Nim : 200180020 <br>
                                👨‍🎓  Prodi : A1 Sistem Informasi <br>
                                👩‍💻  Mata Kuliah : Pemogramman Web II <br>
                                🐱‍🏍{{ $email }}
                            </p>
                            <p class="lead">
                                Halo dan selamat datang di NasDev Developer Shop, tempat untuk menemukan Pakaian dan 
                                Aksesori terbaik untuk setiap selera dan kesempatan. Kami benar-benar memeriksa 
                                kualitas barang kami, bekerja hanya dengan pemasok yang dapat diandalkan sehingga Anda
                                hanya menerima produk dengan kualitas terbaik.
                            </p>
                            <p class="lead">
                                Kami di NasDev Developer Shop percaya pada kualitas tinggi dan layanan pelanggan yang 
                                luar biasa. Namun yang terpenting, kami percaya berbelanja adalah hak, 
                                bukan kemewahan, jadi kami berusaha memberikan produk terbaik dengan harga paling 
                                terjangkau, dan mengirimkannya kepada Anda di mana pun Anda berada.
                            </p>
                            <p class="lead">
                                Saya seorang Mahasiswa Sistem Informasi dari universitas Malikussaleh,
                                memiliki minat di Front-end Developer dan UI/UX Designer.
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection