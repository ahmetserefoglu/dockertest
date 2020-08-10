# docker-test-project

## Kullanım

Kullanım için [Docker](https://docs.docker.com/docker-for-mac/install/)  gereklidir.

Docker kurulumunu gerçekleştirdikten; sonra `src` klasörünü terminalden açtıktan sonra `docker-compose build` komutu ile proje için gerekli container'ları derleyebilirsiniz. `docker-compose up -d` komutu ile container çalışmasını başlatabilirsiniz.
[http://localhost:8080](http://localhost:8080) adresine gidebilirsiniz. 

Local bilgisayarınızda kullanıcı girişlerini test etmek için ;

- `docker-compose run --rm npm install`
- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 
- `docker-compose run --rm artisan config:cache`
- `docker-compose run --rm artisan tinker`
- `docker-compose run --rm artisan config:cache`
- `docker-compose run --rm artisan key:generate`
- `docker-compose exec mysql bash`
- `docker-compose down`
- `docker rename <container_name> <new_container_name>`
- `docker run -d -p <new_port>:<exist_port> --name <container_name>`
- `dokcer rm -f <container_name>`
- `dokcer ps`
- `dokcer images`
- `copy .env.example .env`
- `docker start <container_name>`
- `docker build -t <hub_name>/<repository_name>:[tag] .`
- `docker tag <hub_name>/<repository_name>:[tag]`
- `docker push <hub_name>/<repository_name>:[tag]`

**EkBilgiler:** Container içerisinde çalışan portlar docker-compose.yml içerisinde kontrol edebilirsiniz.

- **nginx** - `:8080`
- **mysql** - `:3306`
- **php** - `:9000`
- **npm**
- **composer**
- **artisan**

**EkBilgiler:2** Crud Operation Test and Vue Operaion Test
- **gorevler** 
- **pricing** 
