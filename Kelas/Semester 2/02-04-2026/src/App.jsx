import { useState } from 'react'
import './App.css'
import { Header } from './components/Menu'
import { Profil } from './components/Profil'

function Jurusan() {}
function Kontak() {}
function Prestasi() {}

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
  const listedPages = ["profil", "jurusan", "kontak", "prestasi"];
  const [page, setPage] = useState("menu")

  function renderNavbar() {
    // Render active navbar on here
  }

  function changePage(props) {
    switch (props.target.id) {
      case "navlink1":
        if (page != "menu") {
          setPage("menu")
        }
        break;

      case "navlink2":
        if (page != "profil") {
          setPage("profil")
        }
        break;

      case "navlink3":
        if (page != "jurusan") {
          setPage("jurusan")
        }
        break;

      case "navlink4":
        if (page != "kontak") {
          setPage("kontak")
        }
        break;

      case "navlink5":
        if (page != "prestasi") {
          setPage("prestasi")
        }
        break;
    
      default:
        break;
    }
    
    console.log(page);

    if (props.target.id) {
      console.log(props.target.id);
    } else {
      currentProps = props.target;

      while (true) {
        if (!currentProps.id && !listedPages.includes(`${currentProps.id}-link`)) {
          currentProps = currentProps.parentNode;
        } else {
          console.log(currentProps.id);
          break;
        }
      }
      // console.log(props.target);
      // console.log("the element doesn't has an id");
    }
    
    // console.log(props);
  }

  return (
    <>
      <nav id='navbar'>
        <p>SMKN 2</p>
        <ul id='navlinks'>
          <li className={ page == "menu" ? 'active' : '' } onClick={changePage} id='navlink1'>Menu</li>
          <li className={ page == "profil" ? 'active' : '' } onClick={changePage} id='navlink2'>Profil</li>
          <li className={ page == "jurusan" ? 'active' : '' } onClick={changePage} id='navlink3'>Jurusan</li>
          <li className={ page == "kontak" ? 'active' : '' } onClick={changePage} id='navlink4'>Kontak</li>
          <li className={ page == "prestasi" ? 'active' : '' } onClick={changePage} id='navlink5'>Prestasi</li>
        </ul>
      </nav>
      <Header />
      <section>
        <section className='container' id='menu'>
          <a href='#profil' onClick={changePage} id='profil-link'>
            <img loading='lazy' src="https://getwallpapers.com/wallpaper/full/f/e/a/933785-school-backgrounds-2048x1152-screen.jpg" alt="" />
            <div>
              <h3>Profil</h3>
              <p>Mari kita mengenal lebih dekat dengan sekolah ini...</p>
            </div>
          </a>
          <a href='#' onClick={changePage} id='jurusan-link'>
            <img loading='lazy' src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8fDA%3D" alt="" />
            <div>
              <h3>Jurusan</h3>
              <p>Apa saja jurusan-jurusan yang terdapat pada sekolah ini ...?</p>
            </div>
          </a>
          <a href='#' onClick={changePage} id='prestasi-link'>
            <img loading='lazy' src="https://t4.ftcdn.net/jpg/09/25/67/07/360_F_925670742_3twHVff424j3wAZ3ev5Sc7PidNyhcfY1.jpg" alt="" />
            <div>
              <h3>Prestasi</h3>
              <p>
                Mari kita lihat berbagai macam penghargaan-penghargaan yang diraih oleh
                siswa-siswi yang telah bersekolah disini...
              </p>
            </div>
          </a>
          <a href='#' onClick={changePage} id='kontak-link'>
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
      </section>
      <Footer />
    </>
  )
}

export default App
