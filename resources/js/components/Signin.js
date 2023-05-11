import React, { useEffect } from 'react';
import Menu from './Menu';
import { useState } from 'react';
import StepOne from './StepOne';
import StepTwo from './StepTwo';


function Signin () {

    const [step, setStep] = useState(1);
    const [formData, setFormData] = useState({});
    const [error, setError] = useState({});

    function nextStep(data) {
      setFormData({ ...formData, ...data});
      setStep(step + 1);
    }

    function prevStep(data) {
        setFormData({ ...formData, ...data });
        setStep(step - 1);
    }

    return (
        <div className="grid grid-flow-row gap-4">
            <div>
                <Menu />
            </div>
            <div className="m-auto py-10 w-[552px] px-20 justify-center bg-white rounded-3xl border-t-4 border-main-blue">                    
                <h1 className="font-bold pb-12 text-center text-[24px]">Inscription</h1>
                {step === 1 && <StepOne nextStep={nextStep} setError={setError} error={error} formData={formData} />}
                {step === 2 && <StepTwo nextStep={nextStep} prevStep={prevStep} setError={setError} error={error} setFormData={setFormData} formData={formData} />}
            </div>
        </div>
    ); 
}

export default Signin;
