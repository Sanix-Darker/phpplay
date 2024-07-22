.PHONY: build install_ffi list_export

build:
	go build -o add.so -buildmode=c-shared main.go

install_ffi:
	pecl install ffi

list_export:
	nm ./add.so
