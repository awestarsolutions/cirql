import os
import sys

# Try to import the new genai
try:
    from google import genai
    from google.genai import types
except ImportError:
    print("google-genai is not installed. Run: pip install google-genai")
    sys.exit(1)

def generate_images():
    if "GEMINI_API_KEY" not in os.environ:
        print("GEMINI_API_KEY environment variable is missing.")
        sys.exit(1)
        
    client = genai.Client(api_key=os.environ["GEMINI_API_KEY"])
    
    # Define images to generate
    images_to_generate = [
        {
            "prompt": "A highly photorealistic, modern SaaS dashboard interface for a community management platform. Dark mode with elegant neon green and purple accents. Features graphs, event listings, and user avatars. Glassmorphism styling, clean UI/UX. The dashboard is displayed slightly angled as a beautiful 3D mockup.",
            "aspect_ratio": "16:9",
            "filename": "public/assets/images/hero_mockup.jpg"
        },
        {
            "prompt": "A professional, photorealistic headshot portrait of a smiling young man in a modern office setup. High quality, soft lighting, suitable for a user avatar profile picture.",
            "aspect_ratio": "1:1",
            "filename": "public/assets/images/avatar1.jpg"
        },
        {
            "prompt": "A professional, photorealistic headshot portrait of a smiling young woman in a modern office setup. High quality, soft lighting, suitable for a user avatar profile picture.",
            "aspect_ratio": "1:1",
            "filename": "public/assets/images/avatar2.jpg"
        },
        {
            "prompt": "A professional, photorealistic headshot portrait of a mature woman smiling in a modern office setup. High quality, soft lighting, suitable for a user avatar profile picture.",
            "aspect_ratio": "1:1",
            "filename": "public/assets/images/avatar3.jpg"
        }
    ]
    
    # Ensure images directory exists
    os.makedirs("public/assets/images", exist_ok=True)
    
    for item in images_to_generate:
        print(f"Generating image for: {item['filename']}...")
        try:
            response = client.models.generate_content(
                model="gemini-3-pro-image-preview",
                contents=[item['prompt']],
                config=types.GenerateContentConfig(
                    response_modalities=['IMAGE'],
                    image_config=types.ImageConfig(
                        aspect_ratio=item['aspect_ratio'],
                        image_size="1K"
                    ),
                )
            )
            
            for part in response.parts:
                if part.inline_data:
                    image = part.as_image()
                    image.save(item['filename'])
                    print(f"Successfully saved {item['filename']}")
                    break
        except Exception as e:
            print(f"Failed to generate {item['filename']}: {e}")

if __name__ == "__main__":
    generate_images()
