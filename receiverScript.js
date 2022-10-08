const donate_form=document.getElementById('donate-form');

function storeDonateData(e){
  //  e.preventDefault();
    const donate_data={
        Name:donate_form.Name.value,
        Phone:donate_form.Phone.value,
        
        Address:donate_form.Address.value,
        
        Goods:donate_form.Goods.value,
        Quantity:donate_form.Quantity.value,
        NgoName:donate_form.NgoName.value,
        Date:donate_form.Date.value
    }
    console.log(donate_data);
}

donate_form.addEventListener('submit',storeDonateData);