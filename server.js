const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql2');
const cors = require('cors');
const path = require('path');

const app = express();
const port = 3000;

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(cors());
app.use(express.static(path.join(__dirname, 'public')));  // Serve static files from 'public' directory

// MySQL Connection
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '', // Replace with your MySQL password
    database: 'todo_rpg'
});

db.connect(err => {
    if (err) {
        console.error('error connecting: ' + err.stack);
        return;
    }
    console.log('connected as id ' + db.threadId);
});

// Routes
app.post('/login', (req, res) => {
    const { username, password } = req.body;
    const query = 'SELECT * FROM users WHERE username = ? AND password = ?';

    db.query(query, [username, password], (err, results) => {
        if (err) {
            console.error(err);
            res.status(500).send({ status: 'error', message: 'Database error' });
        } else if (results.length > 0) {
            res.send({ status: 'success' });
        } else {
            res.send({ status: 'error', message: 'Invalid credentials' });
        }
    });
});

// Middleware to log each request
app.use((req, res, next) => {
    console.log(`Request URL: ${req.url}`);
    next();
});

// Serve login.html as the default page
app.get('/', (req, res) => {
    console.log('Serving login.html');
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// Serve index.html after successful login
app.get('/home.html', (req, res) => {
    console.log('Serving index.html');
    res.sendFile(path.join(__dirname, 'public', 'home.html'));
});

app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
});

