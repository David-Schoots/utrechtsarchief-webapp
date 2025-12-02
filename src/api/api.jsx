import axios from "axios";

const API_URL = "http://localhost:8000/api";

const getAuthHeaders = () => {
  const token = localStorage.getItem("auth_token");
  if (!token) {
    console.warn("Geen API token gevonden in localStorage");
  }
  return {
    "Content-Type": "application/json",
    Accept: "application/json",
    Authorization: `Bearer ${token}`,
  };
};

export const getPages = () => {
  return axios.get(`${API_URL}/pages`, { headers: getAuthHeaders() });
};

export const getUser = () => {
  return axios.get(`${API_URL}/user`, {
    headers: getAuthHeaders(),
  });
};
