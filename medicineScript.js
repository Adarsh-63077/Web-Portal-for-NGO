const donate_form=document.getElementById('donate-form');

function storeDonateData(e){
  //  e.preventDefault();
    const donate_data={
        name:donate_form.name.value,
        phone:donate_form.phone.value,
        email:donate_form.email.value,
        address:donate_form.address.value,
        MedicineName:donate_form.MedicineName.value,
        quantity:donate_form.quantity.value,
        DonationDate:donate_form.Donation_Date.value,
        ExpiryDate:donate_form.ExpiryDate.value
    }
    console.log(donate_data);
}

donate_form.addEventListener('submit',storeDonateData);