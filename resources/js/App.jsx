import React from 'react';
import { createRoot } from 'react-dom/client'
import You from './components/You.jsx'

export default function App(){
    return(
        <You />
    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<App />)
}