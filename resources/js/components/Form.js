import { useState } from "react";

function Form() {
    const [errorMessages, setErrorMessages] = useState({});
    const [isSubmitted, setIsSubmitted] = useState(false);

    const renderErrorMessage = (name) =>
        name === errorMessages.name && (
            <div className="error">{errorMessages.message}</div>
        );

    const handleSubmit = (event) => {
        // Prevent page reload
        event.preventDefault();
        var { username, password } = document.forms[0];

        // Find user login info
        const userData = database.find((user) => user.username === username.value);

        // Compare user info
        if (userData) {
            if (userData.password !== password.value) {
            // Invalid password
            setErrorMessages({ name: "password", message: errors.password });
            } else {
            setIsSubmitted(true);
            }
        } else {
            // Username not found
            setErrorMessages({ name: "username", message: errors.username });
        }
    };

        // User Login info
    const database = [
        {
            username: "user1",
            password: "pass1"
        },
        {
            username: "user2",
            password: "pass2"
        }
    ];

    const errors = {
        username: "invalid username",
        password: "invalid password"
    };
    return (
        <form onSubmit={handleSubmit}>
            <div className="pb-4">
                <input type='text' name='username' placeholder="Username ou Email" 
                    className="mt-1 block w-full px-4 py-3 bg-white border border-slate-200 rounded-3xl"/>
                    {renderErrorMessage("username")}
            </div>
            <div className="pb-4">
                <input type='password' name='password' placeholder="Mot de passe" 
                    className="mt-1 block w-full px-4 py-3 bg-white border border-slate-200 rounded-3xl"/>
                    {renderErrorMessage("password")}
            </div>
            <div>
                <div className="grid grid-cols-2">
                    <div className="float-left">
                        <input type="checkbox" class="border-3 border-main-blue rounded-full accent-main-blue" />
                        <span className="text-sm text-gray-120 ml-1">Se souvenir de moi</span>
                    </div>
                    <div className="float-right">
                        <span className="text-sm text-main-blue text-left">Mot de passe oublié?</span>                
                    </div>
                </div>
            </div>
            <button className="bg-main-blue px-28 py-2 mx-14 mt-10 rounded-3xl text-center text-md text-white font-bold" type="submit">Se connecter</button>
        </form>
    )
}

export default Form