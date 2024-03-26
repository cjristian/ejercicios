const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const PORT = 3000;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

let users = [];
let cars = [];
let reservations = [];

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/views/index.html');
});

app.post('/register', (req, res) => {
  const { name, email, password } = req.body;
  const user = { id: users.length + 1, name, email, password };
  users.push(user);
  res.json({ success: true, message: 'User registered successfully' });
});

app.get('/cars', (req, res) => {
  res.json(cars);
});

app.post('/reserve', (req, res) => {
  const { userId, carId, startDate, endDate } = req.body;
  const reservation = { userId, carId, startDate, endDate };
  reservations.push(reservation);
  res.json({ success: true, message: 'Reservation made successfully' });
});

app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
