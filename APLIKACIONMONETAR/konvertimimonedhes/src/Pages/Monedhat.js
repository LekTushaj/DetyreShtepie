import React, {useState, useEffect} from 'react'
import './Monedhat.css'
import axios from 'axios';
import { Link } from 'react-router-dom';

//function Countries () {
 //   const [countries, setCountries] = useState([]);

  const Monedhat =  () => {
    const [countries, setCountries] = useState([]);
    const [searchWord, setSearchWord] = useState("")

    useEffect(() => {
        axios({
            method: "GET",

            url: `https://free.currconv.com/api/v7/countries?q=&compact=ultra&apiKey=f15baf939bd8527ca77d`,
        })
        .then((response) =>{
        //  console.log(Object.values(response.data.results));
            setCountries(Object.values(response.data.results));
            console.log(countries)
        })
        .catch((error) => {
            console.log(error);
        });
    },[]);


    const filteredCountries = countries.filter((country) => {
        return country.name.toLowerCase().includes(searchWord.toLowerCase());
    })

  return (
    
    <>
        <section className='container searchInp'>
            <h3 className='inputitle'>Njësitë Monetare sipas Shteteve</h3> 
            <input className='inputField' type="text" placeholder="emri shtetit" onChange={(event) => {
                setSearchWord(event.target.value);
                }}
                />
        </section>
        <section className='container grid'>
            {filteredCountries.map(({name,id,alpha3,currencyName,currencyId,currencySymbol}) => (
             //   <Link to={`/${name}`} key={name}>
                            <article key={name}>
                                 <div className='details'>
                                     <div>
                                        <h3> {name} </h3>
                                         <h4>id: <span> {id} </span> </h4>
                                         <h4>shkShteterore: <span> {alpha3} </span> </h4>
                                         <h4>njësiaMonetare: <span> {currencyName} </span> </h4>
                                       <h4>idMonedhes: <span> {currencyId} </span> </h4>
                                        <h4>simboliMonetar: <span> {currencySymbol} </span> </h4>
                                     </div>
                                </div>
                          </article>
                 //   </Link>
            ))}
  
        </section>
    </>
    )}
  
               
  

                    

                  

export default Monedhat