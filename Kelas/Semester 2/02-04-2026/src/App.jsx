import { useState } from 'react'
import './App.css'
import { Profil } from './components/Profil'
import { Jurusan, jurusanImages } from './components/Jurusan'
import { Prestasi } from './components/Prestasi'
import { Kontak } from './components/Kontak'

export const images = {
  'prestasiDiraih': [
    {
      'id': 1,
      'gambar': "https://smkn2buduran.sch.id/wp-content/uploads/2025/11/jagoan-hosting-01-1080x500.jpg",
      'kejuaraan': "Juara \"The Most Innovative Team\" dalam JHIC",
      'tingkat': "nasional",
      'peserta': "Tim SMKN 2 Buduran ( HENGKEL TZY )",
      'kelas': "XI RPL",
      'tempat': "Maspion IT",
      'tanggal': "8 November 2025"
    },
    {
      'id': 2,
      'gambar': "https://smkn2buduran.sch.id/wp-content/uploads/2025/11/juara-karya-tulis-02-520x245.jpg",
      'kejuaraan': "Juara II Lomba Karya Tulis Ilmiah Sejarah",
      'tingkat': "-",
      'peserta': "Tim SMKN 2 Buduran",
      'kelas': "-",
      'tempat': "Dinas Kebudayaan dan Pariwisata Jawa Timur",
      'tanggal': "4 November 2025"
    },
    {
      'id': 3,
      'gambar': "https://smkn2buduran.sch.id/wp-content/uploads/2025/11/juara-papaernas-01-540x340.jpg",
      'kejuaraan': "Juara I Tolak Peluru PEPARPENAS",
      'tingkat': "nasional",
      'peserta': "Erfa Ilmi Bayu Pratama",
      'kelas': "XI BD 1",
      'tempat': "ajang PEPARPENAS",
      'tanggal': "7 November 2025"
    },
    {
      'id': 4,
      'gambar': "https://smkn2buduran.sch.id/wp-content/uploads/2025/05/lomba-LKS-1-720x340.jpg",
      'kejuaraan': "Juara III IT Software Solutions For Business",
      'tingkat': "-",
      'peserta': "Mohammad Rifal Al Fahri",
      'kelas': "XII RPL",
      'tempat': "-",
      'tanggal': "26 April 2025"
    },
    {
      'id': 5,
      'gambar': "https://smkn2buduran.sch.id/wp-content/uploads/2025/03/2024-juara-paskibra-3-629x340.jpg",
      'kejuaraan': "Juara LKPBB SHIP tingkat SMA/SMK",
      'tingkat': "provinsi jawa",
      'peserta': "Tim Paskibra",
      'kelas': "-",
      'tempat': "-",
      'tanggal': "16 September 2024"
    },
    {
      'id': 6,
      'gambar': "https://smkn2buduran.sch.id/wp-content/uploads/2025/03/GSS-2024-604x340-1.jpg",
      'kejuaraan': "Juara I Kompetisi Gala Kreasi Video GSS",
      'tingkat': "nasional",
      'peserta': "Tim SMKN 2 Buduran",
      'kelas': "-",
      'tempat': "Sultan Hotel Jakarta",
      'tanggal': "9 Agustus 2024"
    },
    {
      'id': 7,
      'gambar': "https://smkn2buduran.sch.id/wp-content/uploads/2025/03/os2n-pencak-silat-1-1024x576-1-520x245.jpg",
      'kejuaraan': "Juara I O2SN Pencak Silat Putra",
      'tingkat': "",
      'peserta': "M. Alvin",
      'kelas': "-",
      'tempat': "-",
      'tanggal': "21 Mei 2024"
    },
    {
      'id': 8,
      'gambar': "https://smkn2buduran.sch.id/wp-content/uploads/2025/05/lomba-aip-2-710x340.jpg",
      'kejuaraan': "Juara I Lomba Artikel Ilmiah Populer",
      'tingkat': "-",
      'peserta': "Kepala Sekolah dan Guru SMKN 2 Buduran",
      'kelas': "-",
      'tempat': "",
      'tanggal': "19 April 2025"
    },
  ]
};


function Header() {
  return (
    <header id='menu'>
      <div>
        <img src="https://virtualsekolah.id/tour/viewer/content/logo_1667362332.png" alt="logo smkn 2 buduran sidoarjo" />
        <h1>SMKN 2 Buduran Sidoarjo</h1>
      </div>
    </header>
  )
}


function Footer() {
  return (
    <footer>
      {/* <div id='footer-items'>
        <p>Saran & Masukan</p>
        <p>Dukungan</p>
      </div> */}
      <p>
        &copy; SMKN 2 Buduran - All Rights Reserved
        <br />
        Built by LunarteamZ🌙
      </p>
    </footer>
  )
}


let currentProps;

function App() {
  const listedPages = ["menu", "profil", "jurusan", "prestasi", "kontak"];
  const [page, setPage] = useState("menu")

  function renderNavbar(props) {
    if (props.target.id) {
      if (page != listedPages[props.target.id.at(-1) - 1]) {
        setPage(listedPages[props.target.id.at(-1) - 1])
      }
      
    } else {
      currentProps = props.target;

      while (true) {
        if (!currentProps.id && !listedPages.includes(`${currentProps.id}-link`)) {
          currentProps = currentProps.parentNode;
        } else {
          setPage(listedPages[listedPages.indexOf(currentProps.id.substr(0, currentProps.id.length - 5))]);
          break;
        }
      }
    }
  }

  function scrollFunction() {
    console.log("Hello world");
  }

  return (
    <>
      <nav id='navbar'>
        <p>SMKN 2</p>
        <ul id='navlinks'>
          <li>
            <a href='#menu' className={ page == "menu" ? 'active' : '' } onClick={renderNavbar} id='navlink1'>Menu</a>
          </li>
          <li>
            <a href='#profil' className={ page == "profil" ? 'active' : '' } onClick={renderNavbar} id='navlink2'>Profil</a>
          </li>
          <li>
            <a href='#jurusan' className={ page == "jurusan" ? 'active' : '' } onClick={renderNavbar} id='navlink3'>Jurusan</a>
          </li>
          <li>
            <a href='#prestasi' className={ page == "prestasi" ? 'active' : '' } onClick={renderNavbar} id='navlink4'>Prestasi</a>
          </li>
          <li>
            <a href='#kontak' className={ page == "kontak" ? 'active' : '' } onClick={renderNavbar} id='navlink5'>Kontak</a>
          </li>
        </ul>
      </nav>
      <Header />
      <section>
        <section className='container' id='menu-container'>
          <a href='#profil' className='grid-items' onClick={renderNavbar} id='profil-link'>
            <img loading='lazy' src="https://getwallpapers.com/wallpaper/full/f/e/a/933785-school-backgrounds-2048x1152-screen.jpg" alt="" />
            <div>
              <h3>Profil</h3>
              <p>Mari kita mengenal lebih dekat dengan sekolah ini...</p>
            </div>
          </a>
          <a href='#jurusan' className='grid-items' onClick={renderNavbar} id='jurusan-link'>
            <img loading='lazy' src={jurusanImages['rpl']} alt="" />
            <div>
              <h3>Jurusan</h3>
              <p>Jelajahi jurusan-jurusan yang diminati oleh peserta didik hanya disini...</p>
            </div>
          </a>
          <a href='#prestasi' className='grid-items' onClick={renderNavbar} id='prestasi-link'>
            <img loading='lazy' src="https://t4.ftcdn.net/jpg/09/25/67/07/360_F_925670742_3twHVff424j3wAZ3ev5Sc7PidNyhcfY1.jpg" alt="" />
            <div>
              <h3>Prestasi</h3>
              <p>
                Mari kita lihat berbagai macam penghargaan-penghargaan yang diraih oleh
                siswa-siswi yang telah bersekolah disini...
              </p>
            </div>
          </a>
          <a href='#kontak' className='grid-items' onClick={renderNavbar} id='kontak-link'>
            <img loading='lazy' src="https://img.freepik.com/foto-gratis/tampilan-atas-gelembung-obrolan-dengan-gagang-telepon-dan-ruang-salin_23-2148796078.jpg" alt="" />
            <div>
              <h3>Kontak</h3>
              <p>
                Ada yang ingin disampaikan ?, ayo hubungi pihak sekolah dengan mudah, kapanpun dan dimanapun
                melalui halaman ini...
              </p>
            </div>
          </a>
        </section>
        <Profil />
        <Jurusan />
        <Prestasi />
        <Kontak />
      </section>
      <Footer />
    </>
  )
}

export default App
