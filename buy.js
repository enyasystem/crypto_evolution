const form = document.querySelector('#btc-form');
const senderAddressInput = document.querySelector('#sender-address');
const recipientAddressInput = document.querySelector('#recipient-address');
const amountInput = document.querySelector('#amount');
const sendBTCButton = document.querySelector('#send-btc-btn');

sendBTCButton.addEventListener('click', async (e) => {
   e.preventDefault();

   const senderAddress = senderAddressInput.value;
   const recipientAddress = recipientAddressInput.value;
   const amount = amountInput.value;

   // Call the Coinremitter Bitcoin API to send BTC
   const response = await fetch('https://coinremitter.com/api/v3/btc/sendtoaddress', {
      method: 'POST',
      headers: {
         'Content-Type': 'application/json',
         'API_KEY': '$2y$10$oEj.DQbFaErQpUhce41IhO.dhBgnKBgtpCdQvo29wuEkcQV0yyW2eq'
      },
      body: JSON.stringify({
         address: recipientAddress,
         amount: amount,
         from: senderAddress
      })
   });

   const result = await response.json();
  //  console.log(result);
