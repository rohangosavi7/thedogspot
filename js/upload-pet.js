// Replace YOUR_CLIENT_ID with the OAuth client ID obtained in Step 2
var CLIENT_ID = '271762984344-ukcb245b96jhvg2ilohc8da9d4l3e0uc.apps.googleusercontent.com';

// Replace YOUR_API_KEY with your API key if using the client-side API access (not recommended for sensitive data)
var API_KEY = 'AIzaSyBVkIEvfkjI0X8Zoj7B1AlCRzE1NulEUPk';

// Load the Gmail API client library
gapi.load('client:auth2', initClient);

function initClient() {
  gapi.client.init({
    clientId: CLIENT_ID,
    apiKey: API_KEY,
    discoveryDocs: ["https://www.googleapis.com/discovery/v1/apis/gmail/v1/rest"],
    scope: 'https://www.googleapis.com/auth/gmail.send'
  }).then(function () {
    // Authorization successful
    gapi.auth2.getAuthInstance().signIn().then(function () {
      // Retrieve form values
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var contact = document.getElementById("contact").value;
      var petName = document.getElementById("petName").value;
      var color = document.getElementById("color").value;
      var gender = document.getElementById("gender").value;
      var petType = document.getElementById("petType").value;

      // Compose the email message
      var message = [
        "Your Name: " + name,
        "Email: " + email,
        "Contact Information: " + contact,
        "Pet's Name: " + petName,
        "Color: " + color,
        "Gender: " + gender,
        "Pet Type: " + petType
      ].join('\n');

      // Send the email using the Gmail API
      sendEmail(email, "Pet Information", message);
    });
  });
}

function sendEmail(to, subject, body) {
  var email = "From: me\r\n" +
    "To: " + to + "\r\n" +
    "Subject: " + subject + "\r\n" +
    "Content-Type: text/plain; charset=\"UTF-8\"\r\n\r\n" +
    body;

  var base64EncodedEmail = btoa(email).replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/, '');

  gapi.client.gmail.users.messages.send({
    'userId': 'me',
    'resource': {
      'raw': base64EncodedEmail
    }
  }).then(function (response) {
    console.log(response);
    if (response.result && response.result.error) {
      console.error(response.result.error.message);
    } else {
      alert("Email sent successfully!");
    }
  }).catch(function (error) {
    console.error(error);
  });
}
