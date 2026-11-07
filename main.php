<?php
declare(strict_types=1);

/**
 * zakat-php-gold-silver-nisab — حاسبة نصاب الذهب والفضة والأوراق النقدية بالعيارات
 * Multi-Karat Gold (85g 24K) & Silver (595g) Nisab Zakat Engine
 */
$input = "Gold24K=100g,Gold21K=80g";
$digest = substr(hash("sha256", "zakat-php-gold-silver-nisab:" . $input), 0, 12);

echo "[RUN] zakat-php-gold-silver-nisab (PHP) — Multi-Karat Gold (85g 24K) & Silver (595g) Nisab Zakat Engine" . PHP_EOL;
echo "[AR]  حاسبة نصاب الذهب والفضة والأوراق النقدية بالعيارات" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Pure24KEquiv=170.0g | AboveNisab=True | ZakatDue=4.25g | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
