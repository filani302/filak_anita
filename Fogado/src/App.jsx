import { useState } from 'react'
import './App.css'
import { Navbar } from './Navbar'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import {Home} from './Home';
import {Foglalas} from './Foglalas';
import {Header} from './Header';



function App() {

  return (
    <>
    <div className='App'>
      <Navbar/>
      <Header/>
    <Routes>
              <Route path='/' element={<Home />} />
              <Route path='/foglalas' element={<Foglalas />} />
    </Routes>
    
    </div>
  
    </>
  )
}

export default App
