import React, { useState } from 'react';
type useInputLabelType = {
  value: string;
  labelChange: (
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>
  ) => void;
  handleInputFocus: () => void;
  handleInputBlur: () => void;
  labelClass: string;
};

export const useInputLabel = (): useInputLabelType => {
  const [value, setValue] = useState<string>('');
  const [isFocused, setIsFocused] = useState<boolean>(false);

  const labelChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>
  ) => {
    setValue(e.target.value);
  };

  const handleInputFocus = () => {
    setIsFocused(true);
  };

  const handleInputBlur = () => {
    setIsFocused(false);
  };

  const labelClass = `absolute text-grey text-x4 top-[3px] left-6 transition-all ${
    value || isFocused ? 'opacity-100' : 'opacity-0'
  }`;

  return {
    labelChange,
    handleInputFocus,
    handleInputBlur,
    value,
    labelClass,
  };
};
