## Características

### Característica 1 -Jugar Bingo

- Necesitamos poder llamar a los números
- Generar cartones de Bingo para jugadores.
- Revise sus tarjetas cuando alguien llame a Bingo

### Generating Bingo Cards

_ Necesitamos un generador de cartones de bingo
- Cada cartón de Bingo tiene 25 espacios únicos
- Cada columna contiene números entre $ loweBound y $ upperBound (inclusive)
- Hay 1 espacio libre en el medio de la tarjeta generada.

| Column | Lower bound | Upper bound |
| - | -- | -- |
| B |  1 | 15 |
| I | 16 | 30 |
| N | 31 | 45 |
| G | 45 | 60 |
| O | 61 | 75 |

### Cheking Bingo Cards
- We need to check player's cards when they call Bingo (so that a winner can be decided)
- When a player calls Bingo check if all numbers in his/her card have been called
- Determine whether a player is winner or not
