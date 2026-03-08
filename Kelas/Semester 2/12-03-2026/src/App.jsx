import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function Menu() {}
function Profil() {}
function Jurusan() {}
function Kontak() {}
function Prestasi() {}

let oldCurrentPage, currentPage = 1;
const pages = [ <Menu />, <Profil />, <Jurusan />, <Kontak />, <Prestasi />];

function renderPage(props) {
  oldCurrentPage = currentPage;
  currentPage = document.getElementById(props.target.id).id.at(-1);
  console.log(currentPage);

  console.log(document.getElementById(props.target.id));

  for (let link = 1; link <= 5; link++) {
    if (currentPage != oldCurrentPage) {
      if (link == currentPage) {
        document.getElementById(props.target.id).style.color = "cyan";
        console.log("work");
      } else {
        document.getElementById(props.target.id).style.color = "white";
      }
    }
  }

  // console.log(document.getElementById(props.target.id).id.at(-1));
  switch (props.target.id) {
    case 'navlink-1':
      console.log("Menu");
      break;
  
    default:
      break;
  }
}

function Navbar() {
  return (
    <nav className='navbar'>
      <p id='navtext'>SMKN 2</p>
      <ul id='navlink'>
        <li id='navlink-1' onClick={renderPage} style={{ color: "cyan" }}>Menu</li>
        <li id='navlink-2' onClick={renderPage}>Profil</li>
        <li id='navlink-3' onClick={renderPage}>Jurusan</li>
        <li id='navlink-4' onClick={renderPage}>Kontak</li>
        <li id='navlink-5' onClick={renderPage}>Prestasi</li>
      </ul>
    </nav>
  )
}

function App() {

  return (
    <>
      <Navbar />
    </>
  )
}

export default App
