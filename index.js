function sendEmail() {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "mmdedsign@gmail.com",
        Password: "bedrijfje2341",
        To: 'mmdedsign@gmail.com',
        From: document.getElementById("contact-form"),
        Subject: "Nieuwe mail!",
        Body: "Naam: " + document.getElementById("name").value +
            "Email: " + document.getElementById("email").value +
            "Berichtje: " + document.getElementById("message").value
    }).then(
        message => alert("mail sent successfully")
    );
}