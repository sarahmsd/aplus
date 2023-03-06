import React from 'react'
import ReactDOM from 'react-dom'

import Login from "./Login";

function App() {
    
    return (<div>
        <Login />
    </div>)
}

export default App

if(document.getElementById('root')) {
    ReactDOM.render(<App  />, document.getElementById('root'))
}