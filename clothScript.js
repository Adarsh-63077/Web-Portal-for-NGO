const donate_form=document.getElementById('donate-form');

function storeDonateData(e){
  //  e.preventDefault();
    const donate_data={
        DonerName:donate_form.DonerName.value,
        PhoneNumber:donate_form.PhoneNumber.value,
        Email:donate_form.Email.value,
        Address:donate_form.Address.value,
        Cloth:donate_form.Cloth.value,
        Quantity:donate_form.Quantity.value,
        BuyDate:donate_form.BuyDate.value,
        DonationDate:donate_form.DonationDate.value
    }
    console.log(donate_data);
}

donate_form.addEventListener('submit',storeDonateData);