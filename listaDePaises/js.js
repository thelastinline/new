(async function load() {
  async function getData(url) {
    const response = await fetch(url);
    const data = await response.json();
    return data
  }
  const capitalCyti = getData('https://restcountries.eu/rest/v2/capital/tallinn')
  const paises = await getData('https://restcountries.eu/rest/v2/all')
  const africa = await getData('https://restcountries.eu/rest/v2/region/Africa')
  const america = await getData('https://restcountries.eu/rest/v2/region/Americas')
  const asia = await getData('https://restcountries.eu/rest/v2/region/Asia')
  const europa = await getData('https://restcountries.eu/rest/v2/region/Europe')
  const oceania = await getData('https://restcountries.eu/rest/v2/region/Oceania')
  const region =[ "Africa", "Americas", "Asia", "Europe", "Oceania"]
  console.log(paises[144]);






// for (var i = 0; i < paises.length; i++) {
//   console.log(`${i+1}-${paises[i].name}`);
//
// }
//





})()
