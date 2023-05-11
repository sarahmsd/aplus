import logo from "../assets/logo.png";
import React from "react";
import { Link } from "react-router-dom";

function Menu() {
    return (
        <div className="flex justify-between px-12 py-4">
            <div className="">
                <img src={logo} className="w-40" />
            </div>
            <div className="flex justify-end gap-2">
                <span className="cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                        className="w-[20px] h-[20px] fill-slate-500"
                    >
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg>
                </span>
            </div>
        </div>
    );
}

export default Menu;
