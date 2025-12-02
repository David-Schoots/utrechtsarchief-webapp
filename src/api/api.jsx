import axios from "axios";

const API_URL = "http://localhost:8000/api";

const getAuthHeaders = () => {
  const token = localStorage.getItem("api_token");
  if (!token) {
    console.warn("Geen API token gevonden in localStorage");
  }
  return {
    "Content-Type": "application/json",
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
