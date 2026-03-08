import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from './assets/vite.svg'
import heroImg from './assets/hero.png'
import './App.css'

function Navbar() {
  return (
    <nav id='navbar'>
      <p>SMKN 2</p>
      <ul id='navlinks'>
        <li className='active'>Menu</li>
        <li>Profil</li>
        <li>Jurusan</li>
        <li>Kontak</li>
        <li>Prestasi</li>
      </ul>
    </nav>
  )
}

function Header() {
  return (
    <header>
      <img src="https://virtualsekolah.id/tour/viewer/content/logo_1667362332.png" alt="logo smkn 2 buduran sidoarjo" />
      <h1>SMKN 2 Buduran Sidoarjo</h1>
    </header>
  )
}

function Menu() {
  return (
    <section id='menu'>
      <div>
        <img src="https://getwallpapers.com/wallpaper/full/f/e/a/933785-school-backgrounds-2048x1152-screen.jpg" alt="" />
        <div>
          <h3>Profil</h3>
          <p>Mari kita mengenal lebih dekat dengan sekolah ini...</p>
        </div>
      </div>
      <div>
        <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8fDA%3D" alt="" />
        <div>
          <h3>Jurusan</h3>
          <p>Apa saja jurusan-jurusan yang terdapat pada sekolah ini ...?</p>
        </div>
      </div>
      <div>
        <img src="https://t4.ftcdn.net/jpg/09/25/67/07/360_F_925670742_3twHVff424j3wAZ3ev5Sc7PidNyhcfY1.jpg" alt="" />
        <div>
          <h3>Prestasi</h3>
          <p>
            Mari kita lihat berbagai macam penghargaan-penghargaan yang diraih oleh
            siswa-siswi yang telah bersekolah disini...
          </p>
        </div>
      </div>
      <div>
        <img src="https://img.freepik.com/foto-gratis/tampilan-atas-gelembung-obrolan-dengan-gagang-telepon-dan-ruang-salin_23-2148796078.jpg" alt="" />
        <div>
          <h3>Kontak</h3>
          <p>
            Ada yang ingin disampaikan ?, ayo hubungi pihak sekolah dengan mudah, kapanpun dan dimanapun
            melalui halaman ini...
          </p>
        </div>
      </div>
    </section>
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

function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <Navbar />
      <Header />
      <Menu />
      <Footer />
    </>
  )
}

export default App
