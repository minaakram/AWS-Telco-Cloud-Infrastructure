# 🌐 Telco Cloud: Subscriber Management Infrastructure

## 📋 Project Overview
This project demonstrates a high-availability **3-Tier Cloud Architecture** designed for Telecommunications Service Providers. It simulates a **Virtual Network Function (VNF)** that manages subscriber data through a secure connection between a Web Portal (EC2) and a Private Database (RDS).

---

## 🏗️ Architecture Design
The infrastructure is built from scratch within a custom **VPC** to ensure maximum isolation and security:

* **Public Tier:** Hosts the EC2 Web Server (Portal) accessible via an Internet Gateway.
* **Private Tier:** Hosts the Amazon RDS (MySQL) instance, hidden from the public internet for data protection.
* **Networking:** Custom Route Tables and Security Groups manage the traffic flow between tiers.

### 🗺️ Infrastructure Resource Map
![Resource Map](./Resourse%20map.png)
*Visual representation of the VPC, Subnets, and Gateways.*

---

## 🚀 Features & Implementation

### 1. VNF User Interface
The portal provides a real-time status check of the database connectivity and displays subscriber details.
![VNF Interface](./VNF%20Interface.png)

### 2. Service Monitoring
Integration with **Amazon CloudWatch** to monitor database performance and network throughput.
![CloudWatch Metrics](./cloudwatch-metrics.png.png)

### 3. Automated Deployment
The server is configured using a specialized **User Data script** that automates the installation of Apache, PHP, and MySQL clients upon startup.

---

## 📁 Repository Structure
* `index.php`: The frontend logic for the Subscriber Portal.
* `config.php`: Database connection settings and credentials.
* `ec2 server.png`: Evidence of the running compute instance.

---

## 🛠️ Tech Stack
* **Cloud Provider:** AWS (VPC, EC2, RDS, CloudWatch)
* **Backend:** PHP
* **Database:** MySQL
* **Web Server:** Apache (httpd)
