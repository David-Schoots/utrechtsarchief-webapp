import React, { useState, useEffect } from "react";

export default function ReadApi() {
  useEffect(() => {
    fetch("http://127.0.0.1:8000/api/panorama/")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        setPosts(data);
      })
      .catch((err) => {
        console.log(err.message);
      });
  }, []);
}
