import { useState } from 'react'
import './App.css'
import { Profil } from './components/Profil'
import { Jurusan } from './components/Jurusan'

export const images = {
  'rpl': "https://images.unsplash.com/photo-1607799279861-4dd421887fb3?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8fDA%3D",
  'ak': "https://wallpaperaccess.com/full/1393269.jpg",
  'dkv': "https://thumbs.dreamstime.com/b/graphic-design-software-user-interface-real-tools-creativity-communication-concept-collage-paper-cut-composition-98421957.jpg",
  'bd': "https://img.freepik.com/free-photo/map-lying-wooden-table_53876-105723.jpg?semt=ais_hybrid&w=740&q=80",
  'lpb': "https://png.pngtree.com/thumb_back/fh260/background/20251009/pngtree-bank-employee-assisting-customer-with-financial-documents-and-laptop-professional-service-image_19813131.webp",
  'mp': "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDiVj289ZSbzhsNHiv6HmNRv5QNzJAHnnj8Q&s"
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
      <div id='footer-items'>
        <p>Saran & Masukan</p>
        <p>Dukungan</p>
      </div>
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
            <a href='#' className={ page == "prestasi" ? 'active' : '' } onClick={renderNavbar} id='navlink4'>Prestasi</a>
          </li>
          <li>
            <a href='#' className={ page == "kontak" ? 'active' : '' } onClick={renderNavbar} id='navlink5'>Kontak</a>
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
            <img loading='lazy' src={images['rpl']} alt="" />
            <div>
              <h3>Jurusan</h3>
              <p>Jelajahi jurusan-jurusan yang diminati oleh peserta didik hanya disini...</p>
            </div>
          </a>
          <a href='#' className='grid-items' onClick={renderNavbar} id='prestasi-link'>
            <img loading='lazy' src="https://t4.ftcdn.net/jpg/09/25/67/07/360_F_925670742_3twHVff424j3wAZ3ev5Sc7PidNyhcfY1.jpg" alt="" />
            <div>
              <h3>Prestasi</h3>
              <p>
                Mari kita lihat berbagai macam penghargaan-penghargaan yang diraih oleh
                siswa-siswi yang telah bersekolah disini...
              </p>
            </div>
          </a>
          <a href='#' className='grid-items' onClick={renderNavbar} id='kontak-link'>
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
      </section>
      <Footer />
    </>
  )
}

export default App
