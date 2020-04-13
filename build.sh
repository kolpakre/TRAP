echo "Сборка проекта..."
#Получение имени ветки
$(git clone https://github.com/rok9ru/trpo-core core)
$(touch version)
$(git symbolic-ref --short -q HEAD>version)




