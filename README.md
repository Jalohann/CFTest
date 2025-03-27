# Cloudflare Solutions Engineering Technical Project

[johannrajadurai.com](johannrajadurai.com)

This repository contains my deliverable for Part 1 of the Cloudflare Solutions Engineering Technical Project.

## Project Overview

This project demonstrates the implementation of a web application that meets the following requirements:

1. A web server that returns all HTTP request headers in the response
2. Traffic proxied through Cloudflare
3. Secure communication with TLS 1.2+
4. Web Application Firewall (WAF) configured to:
   - Block visitors from the United States
   - Challenge visitors from Canada
   - Allow all other visitors

## Features

- **Header Display**: Shows all HTTP request headers received by the server with detailed explanations
- **WAF Status**: Visually indicates whether the visitor is blocked, challenged, or allowed based on geographic location
- **Cloudflare Headers**: Specially highlights Cloudflare-specific headers to demonstrate the proxying of traffic

## Implementation

The implementation consists of:

- Real time display of HTTP headers from client browser
- Cloudflare configuration for DNS, TLS, and WAF settings
- Custom UI with Bootstrap for a professional presentation

## Usage

Simply visit the hosted website to see the headers and WAF behavior in action. The site will display different messages depending on your geographic location (or VPN).
