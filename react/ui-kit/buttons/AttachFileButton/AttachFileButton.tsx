import React from 'react';
import { AttachFileIcon } from 'src/assets/icons';

type AttachFileProps = {
  title: string;
};

export const AttachFileButton: React.FC<AttachFileProps> = ({ title }) => (
  <button>
    <div className="flex items-center gap-4">
      <AttachFileIcon />
      <span className="text-grey text-x3">{title}</span>
    </div>
  </button>
);
