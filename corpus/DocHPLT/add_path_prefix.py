#!/usr/bin/env python3


import argparse
import zipfile
import os


parser = argparse.ArgumentParser()
parser.add_argument("-z", "--zipfile", type=str)
parser.add_argument("-p", "--prefix", type=str, default="en")

args = parser.parse_args()

zip_path = args.zipfile
path_prefix = args.prefix
filenames = {}

def add_path_to_files_in_zip(zip_path, path_prefix):
    # Create a temporary file to store the new zip
    temp_zip_path = zip_path + '.tmp'
    
    with zipfile.ZipFile(zip_path, 'r') as zip_in:
        with zipfile.ZipFile(temp_zip_path, 'w', compression=zipfile.ZIP_DEFLATED, compresslevel=6) as zip_out:
            # Iterate through each file in the original zip
            for file_info in list(set(zip_in.infolist())):

                if file_info.filename.endswith('.xml'):

                    if file_info.filename not in filenames:
                    
                        # Create the new filename by adding the path prefix
                        new_filename = os.path.join(path_prefix, file_info.filename)
                        # print(f"writing {new_filename}")
                
                        # Read the content of the file
                        file_data = zip_in.read(file_info.filename)
                
                        # Write the file with the new filename to the new zip
                        zip_out.writestr(new_filename, file_data)
                        
                        # filenames.append(file_info.filename)
                        filenames[file_info.filename] = 1
    
    # Replace the old zip file with the new one
    os.replace(temp_zip_path, zip_path)
    print(f"Added path prefix '{path_prefix}' to all files in the ZIP archive.")


add_path_to_files_in_zip(zip_path, path_prefix)
