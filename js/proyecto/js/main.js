document.addEventListener('DOMContentLoaded', () => {
    const registrationForm = document.getElementById('registrationForm');
    const carList = document.getElementById('carList');
    const reservationForm = document.getElementById('reservationForm');
  
    registrationForm.addEventListener('submit', async (event) => {
      event.preventDefault();
  
      const formData = new FormData(registrationForm);
      const response = await fetch('/register', {
        method: 'POST',
        body: formData,
      });
  
      const result = await response.json();
      alert(result.message);
    });
  
    reservationForm.addEventListener('submit', async (event) => {
      event.preventDefault();
  
      const formData = new FormData(reservationForm);
      const response = await fetch('/reserve', {
        method: 'POST',
        body: formData,
      });
  
      const result = await response.json();
      alert(result.message);
    });
  
    // Fetch and display the list of cars
    const fetchCars = async () => {
      const response = await fetch('/cars');
      const carData = await response.json();
  
      carList.innerHTML = '<h2>Available Cars</h2>';
      carData.forEach((car) => {
        const carItem = document.createElement('div');
        carItem.innerHTML = `<p>${car.brand} ${car.model}, Year: ${car.year}, Price per day: ${car.price}</p>`;
        carList.appendChild(carItem);
      });
    };
  
    fetchCars();
  });
  