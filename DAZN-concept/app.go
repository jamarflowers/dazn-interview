package main

import (
	"log"
	"net/http"
)

func main() {
	staticserv := http.FileServer(http.Dir("static"))
	http.Handle("/", staticserv)

	log.Println("what up fam, file server on...")
	http.ListenAndServe("0.0.0.0:8080", nil)
}
