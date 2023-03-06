import Form from "./Form";
import login from "../assets/login.png"
import React from "react";
import Menu from "./Menu";

function Login () {
    return (
        <div className="grid grid-flow-row gap-4">
            <div>
                <Menu />
            </div>
            <div className="mx-40 my-2">
                <div className="grid grid-cols-2 rounded-3xl md:grid-flow-row">
                    <div className="grid bg-main-blue justify-center text-center rounded-l-3xl"> 
                        <img src={login} className='justify-center w-90 h-70' alt="login" />           
                    </div>
                    <div className="p-20 justify-center bg-white rounded-r-3xl">
                        <div className="py-3 bg-yellow rounded-r-3xl -ml-20 -mt-10 mb-7">
                            <h1 className="text-white text-3xl font-bold text-center">Bienvenue sur Académie Plus</h1>
                        </div>
                        <h1 className="text-3xl font-bold pb-10 text-center">Connexion</h1>
                        <Form />
                    </div>
                </div>
            </div>            
        </div>
    )
}

export default Login