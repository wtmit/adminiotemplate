import React from 'react'
import Header from './Header'
import Navbar from './Navbar'
import Footer from './Footer'


export default ({ children }) => {

    return (
        <>
        <div class="wrapper">
            
            <Navbar />
            <div class="main">
            <Header />
            {children}

            <Footer />
            </div>
            </div>
        </>
    )
}

