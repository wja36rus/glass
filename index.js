const fs = require("fs");
const path = require("path");

function combineFilesSync(sourceDir, outputFile) {
  try {
    // Читаем содержимое папки
    const files = fs.readdirSync(sourceDir);

    // Создаем или очищаем результирующий файл
    fs.writeFileSync(outputFile, "");

    // Проходим по каждому файлу
    files.forEach((file) => {
      const filePath = path.join(sourceDir, file);

      // Проверяем, что это файл (не папка)
      const stat = fs.statSync(filePath);
      if (stat.isFile()) {
        // Читаем содержимое файла
        const content = fs.readFileSync(filePath, "utf8");

        // Добавляем разделитель и содержимое в результирующий файл
        const separator = `\n\n`;
        fs.appendFileSync(outputFile, separator + content);

        console.log(`Добавлен файл: ${file}`);
      }
    });

    console.log(`Готово! Результат сохранен в ${outputFile}`);
  } catch (error) {
    console.error("Ошибка:", error.message);
  }
}

combineFilesSync("./css", "./result.css");
