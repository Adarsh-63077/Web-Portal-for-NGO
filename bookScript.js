const donate_form=document.getElementById('donate-form');

function storeDonateData(e){
  //  e.preventDefault();
    const donate_data={
        DonarName:donate_form.DonarName.value,
        PhoneNumber:donate_form.PhoneNumber.value,
        Email:donate_form.Email.value,
        Address:donate_form.Address.value,
        BookName:donate_form.BookName.value,
        AuthorName:donate_form.AuthorName.value,
        Quantity:donate_form.Quantity.value,
        DonationDate:donate_form.DonationDate.value
    }
    console.log(donate_data);
}

donate_form.addEventListener('submit',storeDonateData);