import React, { useState } from "react";
import Menu from "./Menu";
import axios from "axios";
import { redirect } from "react-router-dom";

function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [error, setError] = useState({});

    // Generate JSX code for error message
    const renderErrorMessage = (name) =>
        name === error.name && (
            <div className="text-red-600 text-center">{error.message}</div>
        );

    const checkEmail = (e) => {
        setEmail(e);
        if (!e.includes("@")) {
            setError({ name: "email", message: errors.email });
        } else {
            setError({ name: "email", message: "" });
        }
    };

    function handleSubmit(event) {
        event.preventDefault();
        axios.defaults.withCredentials = true;
        // CSRF COOKIE
        axios.get("sanctum/csrf-cookie").then((response) => {
            //LOGIN
            axios
                .post("/api/login", { email, password })
                .then((response) => {
                    localStorage.setItem("token", response.data.token);
                    localStorage.setItem("user", response.data.user);
                    localStorage.setItem("profil", response.data.profil);
                    const user = JSON.parse(localStorage.getItem("user"));
                    const ecole = JSON.parse(localStorage.getItem("profil"));
                    console.log("user", user);
                    user.profil === "Ecole" &&
                        (window.location.href = "/api/dashboard");
                    response.data.profil === "Candidat" &&
                        console.log("profil", response.data.profil);
                })
                .catch((error) => {
                    setError({ name: "message", message: errors.message });
                });
        });
    }

    const handleChange = (event) => {
        console.log("dfgh");
    };

    const errors = {
        email: "adresse email incorrect",
        pass: "mot de passe incorrect",
        message: "Indentifiants incorrects! Veuillez réessayer.",
    };

    return (
        <div className="grid grid-flow-row gap-4">
            <div>
                <Menu />
            </div>
            <div className="m-auto py-10 w-[552px] px-20 justify-center bg-white rounded-3xl border-t-4 border-main-blue">
                <h1 className="font-bold pb-12 text-center text-[24px]">
                    Connexion
                </h1>
                <form method="POST" onSubmit={handleSubmit}>
                    <div className="grid justify-center gap-6">
                        {renderErrorMessage("message")}
                        <div className="w-[488px] h-[58px]">
                            <input
                                type="email"
                                name="email"
                                placeholder="Votre email..."
                                className="px-4 py-3 w-full bg-white border border-slate-200 rounded-full text-[16px] font-normal"
                                value={email}
                                onChange={(event) =>
                                    checkEmail(event.target.value)
                                }
                            />
                            {renderErrorMessage("email")}
                        </div>
                        <div className="pb-4 w-[488px] h-[58px] ">
                            <input
                                type="password"
                                name="password"
                                placeholder="Votre mot de passe..."
                                className="w-full px-4 py-3 bg-white border border-slate-200 rounded-full text-[16px] font-normal"
                                value={password}
                                onChange={(event) =>
                                    setPassword(event.target.value)
                                }
                            />
                            {renderErrorMessage("password")}
                        </div>
                        <div className="text-right text-main-blue text-[16px]">
                            Mot de passe oublié?
                        </div>
                        <div className="mt-2 w-[488px] h-[58px]">
                            <button
                                type="submit"
                                className="text-white bg-main-blue w-full px-4 py-3 rounded-full text-[18px] font-medium"
                            >
                                Se connecter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default Login;
