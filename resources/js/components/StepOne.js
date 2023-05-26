import { isEmpty } from "lodash";
import { useState } from "react";

function StepOne({ nextStep, setError, error, formData }) {
    const [email, setEmail] = useState(formData.email);
    const [password, setPassword] = useState(formData.password);
    const [confirmPassword, setConfirmPassword] = useState(
        formData.confirmPassword
    );

    const errors = {
        email: "adresse email incorrect",
        password: "Les mots de passe ne correspondent pas",
        message: "Remplissez correctement tous les champs avant de continuer!",
    };

    // Generate JSX code for error message
    const renderErrorMessage = (name) =>
        name === error.name && (
            <div className="text-red-600 text-center">{error.message}</div>
        );

    function handleSubmit(event) {
        event.preventDefault();
        if (
            !isEmpty(email) &&
            !isEmpty(password) &&
            !isEmpty(confirmPassword) &&
            isEmpty(error.message)
        ) {
            nextStep({ email, password, confirmPassword });
        } else {
            setError({ name: "message", message: errors.message });
        }
    }

    const checkPasswords = (e) => {
        setConfirmPassword(e.target.value);
        if (password !== e.target.value) {
            setError({ name: "password", message: errors.password });
        } else {
            setError({ name: "password", message: "" });
            setError({ name: "message", message: "" });
        }
    };

    const checkEmail = (e) => {
        setEmail(e.target.value);
        if (!e.target.value.includes("@")) {
            setError({ name: "email", message: errors.email });
        } else {
            setError({ name: "email", message: "" });
            setError({ name: "message", message: "" });
        }
    };

    const handleChange = (event) => {};

    return (
        <form onSubmit={handleSubmit}>
            <div className="grid justify-center gap-6">
                {renderErrorMessage("message")}
                <div className="w-[488px] h-[58px]">
                    <input
                        type="email"
                        name="email"
                        placeholder="Votre email..."
                        className="px-4 py-3 w-full bg-white border border-slate-200 rounded-full text-[16px] font-normal"
                        value={email}
                        onChange={(e) => checkEmail(e)}
                    />
                    {renderErrorMessage("email")}
                </div>
                <div className="w-[488px] h-[58px]">
                    <input
                        type="password"
                        name="password"
                        placeholder="Votre mot de passe..."
                        className="px-4 py-3 w-full bg-white border border-slate-200 rounded-full text-[16px] font-normal"
                        value={password}
                        onChange={(e) => setPassword(e.target.value)}
                    />
                    {renderErrorMessage("password")}
                </div>
                <div className="w-[488px] h-[58px]">
                    <input
                        type="password"
                        name="confirmPassword"
                        placeholder="Confirmez votre mot de passe..."
                        className="px-4 py-3 w-full bg-white border border-slate-200 rounded-full text-[16px] font-normal"
                        value={confirmPassword}
                        onChange={(e) => checkPasswords(e)}
                    />
                    {renderErrorMessage("password")}
                </div>
                <div className="mt-6 w-[488px] h-[58px]">
                    <button
                        type="submit"
                        className="text-white bg-main-blue w-full px-4 py-3 rounded-full text-[18px] font-medium"
                    >
                        Etape Suivante
                    </button>
                </div>
                <div className="text-center text-gray-500 text-[16px]">
                    Déjà inscrit ?
                    <a href="/login" className="text-main-blue underline font-bold">
                        Se connecter
                    </a>
                </div>
            </div>
        </form>
    );
}

export default StepOne;
