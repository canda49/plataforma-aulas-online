const express = require('express');
const app = express();
const PORT = process.env.PORT || 5000;

app.get('/', (req, res) => {
    res.send('API da Plataforma de Aulas Online');
});

app.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}`);
});
