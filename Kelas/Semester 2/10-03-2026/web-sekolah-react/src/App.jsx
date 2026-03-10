import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function Menu() {
  const menuStyles = {
    'mainContainer': {
      display: "grid",
      gridTemplateColumns: "1fr 1fr",
      gap: "30px",
    },
    'elements': {
      border: "1px solid #bababa",
      borderRadius: "3%",
    }
  };

  return (
    <>
      <h2>Menu</h2>
      <div style={menuStyles['mainContainer']}>
        <a style={menuStyles['elements']} href='#profil'>
          <h3>Profil</h3>
        </a>
        <a style={menuStyles['elements']} href='#'>
          <h3>Jurusan</h3>
        </a>
        <a style={menuStyles['elements']} href='#'>
          <h3>Kontak</h3>
        </a>
        <a style={menuStyles['elements']} href='#'>
          <h3>Prestasi</h3>
        </a>
      </div>
    </>
  )
}


function Profil() {
  return (
    <>
      <h2>Profil</h2>
      <div style={{ 
        display: "grid",
        gridTemplateColumns: "1fr 1fr",
        justifyContent: "space-between",
        gap: "50px"
       }}>
        <div>
          <h3>Tentang</h3>
          <p style={{ 
            textAlign: "left",
            textIndent: "4em"
           }}>
            <b>SMKN 2 Buduran</b> ialah sekolah yang terletak di jalan Siwalanpanji,
            Buduran, Sidoarjo, Jawa Timur.
          </p>
        </div>

        <div>
          <h3>Data Sekolah</h3>
          <table border={1} style={{ 
            width: "100%"
           }}>
            <tr>
              <td style={{  }}>Jurusan</td>
              <td style={{  }}>RPL, DKV, AK, BD, LPB, MP</td>
            </tr>
          </table>
        </div>
      </div>
    </>
  )
}


function App() {
  const styles = {
    display: "flex",
    flexDirection: "column",
    gap: "140px"
  };

  return (
    <div>
      <h1>Web Sekolah Statis + React</h1>
      <div style={styles}>
        <div>
          <Menu />
        </div>
        <div>
          <Profil />
        </div>
      </div>
    </div>
  )
}

export default App
