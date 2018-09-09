
# PERINTAH GIT

## Konfigurasi Awal

git config --global user.name "nama_user"

git config --global user.email contoh@petanikode.com

git config --list


## Mengambil Repo Lokal

git clone /path/to/local/repository

git clone user.name@host:/path/to/remote/repository

## Membuat Repo lokal

git add <file_name>

git commit –m “Tambahkan catatan untuk commit Anda”

git remote add origin <server>
  
git push origin master

## BRANC

### Membuat Branc
git checkout -b nama_branc

### Mengirim Branc ke Remote

### Kembali ke master
git checkout master

### Menggabung
git merge feature_n

### Membedakan 2 versi
git diff <nama_sumber_branch> <nama_target_branch>

### Membuat Tag
git tag 1.1.0 1c2d2d56fa

### Tahapan
git add index.html about.html contect.html
git commit -m "Commit pertama"

# Remote

git remote -v 



