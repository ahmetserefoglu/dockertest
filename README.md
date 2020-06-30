# docker-test-project

## Kullanım

Kullanım için [Docker](https://docs.docker.com/docker-for-mac/install/)  gereklidir.

Docker kurulumunu gerçekleştirdikten; sonra `src` klasörünü terminalden açtıktan sonra `docker-compose build` komutu ile proje için gerekli container'ları derleyebilirsiniz. `docker-compose up -d` komutu ile container çalışmasını başlatabilirsiniz.
[http://localhost:8080](http://localhost:8080) adresine gidebilirsiniz. 

Local bilgisayarınızda kullanıcı girişlerini test etmek için ;

- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 

**EkBilgiler:** Container içerisinde çalışan portlar docker-compose.yml içerisinde kontrol edebilirsiniz.

- **nginx** - `:8080`
- **mysql** - `:3306`
- **php** - `:9000`
- **npm**
- **composer**
- **artisan**


