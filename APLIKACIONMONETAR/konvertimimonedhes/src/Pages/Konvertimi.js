import React from 'react'
import {useState, useEffect} from 'react';
import axios from 'axios';
import PropTypes from 'prop-types';
import './Konvertimi.css';



function CurrenceConv (props)  {


  return (
    <div className="group">
        <input type='text' value={props.amount} onChange={ev => props.onAmountChange(ev.target.value)} />
        <select value={props.currency} onChange={ev => props.onCurrencyChange(ev.target.value)} >
            {props.currencies.map((currency) =>(
                <option value={currency}>{currency}</option>
            ))}
        </select>
    </div>
  )
}

CurrenceConv.propTypes = {
    amount: PropTypes.number.isRequired,
    currency: PropTypes.string.isRequired,
    currencies: PropTypes.array,
    onAmountChange: PropTypes.func,
    onCurrencyChange: PropTypes.func,
}


 export default function App() {


  const [amount1, setAmount1] = useState(1);
  const [amount2, setAmount2] = useState(1);
  const [currency1, setCurrency1] = useState('EUR');
  const [currency2, setCurrency2] = useState('EUR');
  const [rates, setRates] = useState([]);

  //  api for countries access_key=f2d41f2ee71af5ee4c4a86ae4f94883e`)
  useEffect( () => {
    axios.get(`http://api.exchangeratesapi.io/v1/latest?access_key=f1b3d2e7f645b49141d74997ed272cdd`)
      .then(response => {
        setRates(response.data.rates);
      })
  },[]);

  useEffect( () => {
    if(!rates) {
      handleAmout1Change(1);
    }
  },[rates]);


  function format(number) {
    return number.toFixed(3);
  }

  function handleAmout1Change(amount1) {
    setAmount2(format( amount1 * rates[currency2] / rates[currency1]));
    setAmount1(amount1);
  }

  function handleCurrency1Change(currency1) {
    setAmount2(format( amount1 * rates[currency2] / rates[currency1]));
    setCurrency1(currency1);
  }

  function handleAmout2Change(amount2) {
    setAmount1(format( amount2 * rates[currency1] / rates[currency2]));
    setAmount2(amount2);
  }

  function handleCurrency2Change(currency2) {
    setAmount1(format( amount2 * rates[currency1] / rates[currency2]));
    setCurrency2(currency2);
  }


  return (
    <div>
      <div className='box'>
      <h2>Konvertim Monetar</h2>

        <div className='a1'>
      <CurrenceConv
      onAmountChange={handleAmout1Change} 
      onCurrencyChange={handleCurrency1Change}
       currencies={Object.keys(rates)} amount={amount1} currency={currency1} />
     </div>
     <div className='a2'>
      <CurrenceConv
      onAmountChange={handleAmout2Change}
      onCurrencyChange={handleCurrency2Change}
       currencies={Object.keys(rates)} amount={amount2} currency={currency2}  />
    </div>
    </div>
    </div>
  );
}




