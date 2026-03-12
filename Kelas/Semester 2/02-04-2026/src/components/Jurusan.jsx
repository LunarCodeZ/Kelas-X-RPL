import { useState } from 'react'
import '../App.css'
import { images } from '../App.jsx'

function Jurusan() {
    return (
        <section id='jurusan' className='container page'>
            <h2>Jurusan</h2>
            <div id='jurusan-container'>
                <div className='jurusan-right'>
                    <img src={images['rpl']} alt="ilustrasi jurusan rekayasa perangkat lunak" />
                    <div>
                        <h3>Rekayasa Perangkat Lunak (RPL)</h3>
                        <p className='jurusan-explanation'>
                            Jurusan ini berfokus pada pemahaman logika serta pengetahuan
                            yang dalam tentang internet dan teknologi, sehingga
                            peserta didik diharapkan mampu membuat aplikasi, website,
                            game, IoT, dan sebagainya yang berhubungan dengan teknologi
                            secara efisien, mudah dipelihara, dan memiliki harga jual yang
                            cukup tinggi dalam memecahkan masalah-masalah yang ada.
                        </p>
                    </div>
                </div>
                <div className='jurusan-left'>
                    <img src={images['ak']} alt="ilustrasi jurusan akuntansi" />
                    <div>
                        <h3>Akuntansi (AK)</h3>
                        <p className='jurusan-explanation'>
                            Jurusan ini berfokus pada ketelitian dan ketepatan, sehingga
                            peserta didik diharapkan mampu mencatat, menghitung, dan
                            mengelola berbagai macam hal-hal yang terkait dengan keuangan.
                            Setiap kelasnya, jurusan ini dibagi menjadi 3 bagian dan
                            merupakan jurusan yang paling banyak diminati oleh peserta
                            didik perempuan.
                        </p>
                    </div>
                </div>
                <div className='jurusan-right'>
                    <img src={images['dkv']} alt="ilustrasi jurusan desain komunikasi visual" />
                    <div>
                        <h3>Desain Komunikasi Visual (DKV)</h3>
                        <p className='jurusan-explanation'>
                            Jurusan ini mengandalkan pada kreatifitas, sehingga peserta
                            didik diharapkan mampu menciptakan sebuah karya seni dan
                            desain-desain digital yang berkualitas tinggi.
                            Jurusan ini dibagi menjadi 3 bagian untuk setiap kelasnya
                            dan biasanya memiliki jumlah peserta didik laki-laki dan
                            perempuan yang sama banyak.
                        </p>
                    </div>
                </div>
                <div className='jurusan-left'>
                    <img src={images['bd']} alt="ilustrasi jurusan bisnis digital" />
                    <div>
                        <h3>Bisnis Digital (BD)</h3>
                        <p className='jurusan-explanation'>
                            Jurusan ini mengandalkan pada <i>Hard Skills</i> yang berupa
                            kemampuan dalam marketing dan juga promosi, sehingga peserta
                            didik diharapkan untuk mampu dalam mengelola bisnis-bisnis
                            yang telah mereka dirikan dengan cermat dalam mengikuti
                            perkembangan zaman yang semakin maju.
                        </p>
                    </div>
                </div>
                <div className='jurusan-right'>
                    <img src={images['lpb']} alt="ilustrasi jurusan layanan perbankan" />
                    <div>
                        <h3>Layanan Perbankan (LPB)</h3>
                        <p className='jurusan-explanation'>
                            Jurusan ini lebih mengandalkan pada <i>Soft Skills</i> yang
                            berupa kecepatan dalam bertindak, kedisiplinan, dan juga
                            kesabaran, sehingga peserta didik diharapkan untuk mampu
                            dalam melayani permintaan nasabah yang berhubungan dengan
                            keuangan secara baik.
                        </p>
                    </div>
                </div>
                <div className='jurusan-left'>
                    <img src={images['mp']} alt="ilustrasi jurusan manajemen perkantoran" />
                    <div>
                        <h3>Manajemen Perkantoran (MP)</h3>
                        <p className='jurusan-explanation'>
                            Jurusan ini mengandalkan kedisiplinan, kemampuan
                            dalam berkomunikasi, dan penggunaan teknologi atau
                            alat-alat yang canggih, sehingga peserta didik diharapkan untuk
                            mampu mencetak tenaga kerja profesional yang rapi dan mengurus
                            berbagai macam arsip-arsip dokumen dengan benar dan juga cepat.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    )
}

export { Jurusan }