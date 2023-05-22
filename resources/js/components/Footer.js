import React from "react";

function Footer() {
    return (
        <div className="flex justify-between px-20 py-4 bg-white mb-0 mt-12">
            <div className="flex justify-start gap-4 my-auto">
                <span className="text-slate-400 text-md font-extralight">
                    copyright 2022, Zenstartup.
                </span>
                <span className="text-slate-700 text-md">
                    Politique de confidentialité
                </span>
                <span className="text-slate-700 text-md">Sécurité</span>
            </div>
            <div className="flex flex-end gap-2 my-auto">
                <span className="cursor-pointer bg-blue-700 rounded-full p-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                        className="w-[20px] h-[20px] fill-white"
                    >
                        <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                    </svg>
                </span>
                <span className="cursor-pointer bg-blue-900 rounded-full p-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                        className="w-[20px] h-[20px] fill-white"
                    >
                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                    </svg>
                </span>
            </div>
        </div>
    );
}

export default Footer;
